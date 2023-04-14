const path = require("path");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const { WebpackManifestPlugin } = require("webpack-manifest-plugin");

const WP_THEME = "sm24";

module.exports = (env) => {
  let result = {
    mode: "development",
    devtool: "inline-source-map",
    entry: {
      home: path.resolve(__dirname, "assets/templates", "home.js"),
      p404: path.resolve(__dirname, "assets/templates", "p404.js"),
    },
    output: {
      filename: "js/[name].[contenthash].js",
      path: path.resolve(__dirname, "build"),
      clean: true,
      publicPath: "/",
    },
    devServer: {
      static: "./build",
    },
    optimization: {
      moduleIds: "deterministic",
      runtimeChunk: "single",
      splitChunks: {
        cacheGroups: {
          vendor: {
            test: /[\\/]node_modules[\\/]/,
            name: "vendors",
            chunks: "all",
          },
        },
      },
    },
    plugins: [
      new WebpackManifestPlugin({}),
      new HtmlWebpackPlugin({
        title: "Home page",
        filename: "home.html",
        inject: "head",
        minify: false,
        chunks: ["home"],
        template: path.resolve(__dirname, "assets/templates/home.pug"),
      }),
      new HtmlWebpackPlugin({
        title: "Page 404",
        filename: "p404.html",
        inject: "head",
        minify: false,
        chunks: ["p404"],
        template: path.resolve(__dirname, "assets/templates/p404.pug"),
      }),
    ],
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules/,
          use: {
            loader: "babel-loader",
            options: {
              presets: [["@babel/preset-env", { targets: "defaults" }]],
              plugins: ["@babel/plugin-transform-runtime"],
            },
          },
        },
        {
          test: /\.pug$/,
          use: ["pug-loader"],
        },
        {
          test: /\.(css|scss)$/,
          use: ["style-loader", "css-loader", "sass-loader"],
        },
        {
          test: /\.(png|svg|jpg|jpeg|gif)$/i,
          type: "asset/resource",
          generator: {
            filename: "img/[hash][ext][query]",
          },
        },
        {
          test: /\.(woff|woff2|eot|ttf|otf)$/i,
          type: "asset/resource",
          generator: {
            filename: "fonts/[hash][ext][query]",
          },
        },
      ],
    },
    resolve: {
      alias: {
        "@img": path.resolve(__dirname, "./assets/images/"),
      },
    },
  };

  if (env?.production) {
    result.mode = "production";
    result.devtool = false;
    result.output.publicPath = `/wp-content/themes/${WP_THEME}/build/`;
  }
  return result;
};
