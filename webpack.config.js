/**
 *   Webpack v4
 1. npm --version
 2. npm init -y
 3. npm install webpack webpack-cli --save-dev
 4. npm install babel-core babel-loader babel-preset-env --save-dev
 5. nano .babelrc
 {
     "presets": [
        "env"
      ]
 }
 6. npm install extract-text-webpack-plugin@next --save-dev
 7. npm install style-loader css-loader --save-dev
 8. npm install node-sass sass-loader --save-dev
 9. npm install postcss-loader autoprefixer --save-dev
 10. npm install resolve-url-loader --save-dev
 11. npm install file-loader --save-dev
 12. npm install assets-webpack-plugin --save-dev
 13. npm install webpack-dev-server --save-dev
 *
 */

const HtmlWebpackPlugin = require('html-webpack-plugin');
const AssetsPlugin = require("assets-webpack-plugin");
const TerserJSPlugin = require('terser-webpack-plugin');
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const autoprefixer = require('autoprefixer');
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const path = require('path');
const fs = require('fs');

const THEME_NAME = 'sm24';


let entries = {
    home: './home.js',
    p404: './p404.js',
};

module.exports = env => {
    const IS_DEV = env.mode === 'development';
    const PUBLIC_PATH = IS_DEV ? '/' : `/wp-content/themes/${THEME_NAME}/`;

    const plugins = [
        new CleanWebpackPlugin(),
        new MiniCssExtractPlugin({
            filename: IS_DEV ? "css/[name].css" : "css/[name].[hash:6].min.css",
            disable: false,
            allChunks: false
        }),
        new HtmlWebpackPlugin({
            filename: "home.html",
            title: "Home page",
            chunks: ['home', 'common'],
            template: path.resolve(__dirname, 'assets/templates') + `/home.pug`
        }),
        new HtmlWebpackPlugin({
            filename: "p404.html",
            title: "Page 404!",
            chunks: ['p404', 'common'],
            template: path.resolve(__dirname, 'assets/templates') + `/p404.pug`
        })
    ];

    if (!IS_DEV) {
        plugins.push(new AssetsPlugin({
            path: path.resolve(__dirname, 'src'),
            filename: 'assets.json',
            prettyPrint: IS_DEV,
            processOutput: function (assets) {
                const result = {};
                for (const key in assets) {
                    if (key) {
                        result[key] = {
                            css: assets[key].css,
                            js: assets[key].js
                        }
                    }
                }
                return JSON.stringify(result);
            }
        }));
    }

    const config = {
        context: path.resolve(__dirname, 'assets/templates'),
        optimization: {
            minimizer: [new TerserJSPlugin({}), new OptimizeCSSAssetsPlugin({})],
        },
        mode: env.mode || 'development',
        entry: entries,
        output: {
            path: path.resolve(__dirname, 'src'),
            publicPath: PUBLIC_PATH,
            filename: 'js/[name]' + (IS_DEV ? '.js' : '.[hash:6].min.js'),
            chunkFilename: 'js/[name]' + (IS_DEV ? '.js' : '.[hash:6].min.js')
        },
        module: {
            rules: [
                {
                    test: /\.m?js$/,
                    exclude: /(node_modules|bower_components)/,
                    use: {
                        loader: 'babel-loader'
                    }
                },
                {
                    test: /\.scss$/,
                    use: [
                        {
                            loader: MiniCssExtractPlugin.loader
                        },
                        {
                            loader: 'css-loader'
                        },
                        {
                            loader: 'postcss-loader',
                            options: {
                                plugins: () => [autoprefixer]
                            }
                        },
                        {
                            loader: 'resolve-url-loader'
                        },
                        {
                            loader: 'sass-loader',
                            // options: {
                            //     prependData: (loaderContext) => {
                            //         const constants = fs.readFileSync('./frontend/common/constants.scss', "utf8");
                            //         const { resourcePath, rootContext } = loaderContext;
                            //         const relativePath = path.relative(rootContext, resourcePath);
                            //         // if (relativePath === 'frontend/common/common.scss') {
                            //         if (relativePath.includes('common.scss')) {
                            //             const fonts = fs.readFileSync('./frontend/fonts/fonts.scss', "utf8");
                            //             const reset = fs.readFileSync('./frontend/common/reset.scss', "utf8");
                            //             return `
                            //                 ${constants}
                            //                 ${reset}
                            //                 ${fonts}
                            //             `;
                            //         }
                            //         return constants;
                            //     },
                            //     sourceMap: true
                            // }
                        }
                    ]
                },
                {
                    test: /\.pug$/,
                    loader: "pug-loader",
                    options: {
                        pretty: IS_DEV
                    }
                },
                {
                    test: /\.(jpg|png|svg|gif)$/,
                    use: [
                        {
                            loader: 'file-loader',
                            options: {
                                name: IS_DEV ? 'icons/[name].[ext]' : 'icons/[name].[hash:6].[ext]',
                                publicPath: PUBLIC_PATH
                            }
                        }
                    ]
                },
                {
                    test: /\.(eot|ttf|woff|woff2)$/,
                    use: [
                        {
                            loader: 'file-loader',
                            options: {
                                name: 'fonts/[name].[hash:6].[ext]',
                                publicPath: PUBLIC_PATH
                            }
                        }
                    ]
                },
            ]
        },
        devServer: {
            overlay: true,
            contentBase: PUBLIC_PATH,
            proxy: {
                '/': {
                    target: 'http://sm24.loc/',
                    changeOrigin: true
                }
            }
        },
        plugins: plugins,
        resolve: {
            alias: {
                // core: path.join(__dirname, 'frontend/core'),
                // icons: path.join(__dirname, 'frontend/icons'),
                // root: path.join(__dirname, 'frontend/root')
            }
        }
    };

    return config;
};
//     context: path.resolve(__dirname, 'assets/templates'),
//     entry: entries,

//     output: {
//         path: path.resolve(__dirname, 'src'),
//         publicPath: '/src/',
//         filename: 'js/[name]' + (DEV_MODE ? '.js' : '.[hash].min.js'),
//         chunkFilename: 'js/[name]' + (DEV_MODE ? '.js' : '.[hash].min.js'),
//         library: '[name]',
//     },
//     optimization: {
//         runtimeChunk: { name: 'common' },
//         splitChunks: {
//             cacheGroups: {
//                 default: false,
//                 commons: {
//                     test: /\.(js|scss)$/,
//                     chunks: 'all',
//                     minChunks: 2,
//                     name: 'common',
//                     enforce: true,
//                 },
//             },
//         },
//     },
//     devtool: DEV_MODE ? 'source-map' : false,
//     devServer: {
//         overlay: {
//             warnings: true,
//             errors: true
//         }
//     },
//     module: {
//         rules: [
//             {
//                 test: /\.pug$/,
//                 loader: 'pug-loader',
//                 options: {
//                     pretty: true
//                 }
//             },
//             {
//                 test: /\.js$/,
//                 exclude: /node_modules\/(?!(dom7|ssr-window|swiper)\/).*/,
//                 use: {
//                     loader: "babel-loader"
//                 }
//             }, {
//                 test: /\.css$/,
//                 use: [
//                     {
//                         loader: 'style-loader'
//                     }, {
//                         loader: 'css-loader'
//                     }, {
//                         loader: 'postcss-loader',
//                         options: {
//                             plugins: [
//                                 autoprefixer({
//                                     browsers: ['ie >= 10', 'last 3 version']
//                                 })
//                             ],
//                             sourceMap: true
//                         }
//                     }, {
//                         loader: 'resolve-url-loader'
//                     }
//                 ]
//             }, {
//                 test: /\.scss$/,
//                 use: ExtractTextPlugin.extract(
//                     {
//                         fallback: 'style-loader',
//                         use: [
//                             {
//                                 loader: 'css-loader',
//                             }, {
//                                 loader: 'postcss-loader',
//                                 options: {
//                                     plugins: [
//                                         autoprefixer({
//                                             browsers: ['ie >= 10', 'last 3 version']
//                                         })
//                                     ],
//                                     sourceMap: true
//                                 }
//                             }, {
//                                 loader: 'resolve-url-loader'
//                             }, {
//                                 loader: 'sass-loader',
//                                 options: {
//                                     sourceMap: true
//                                 }
//                             }
//                         ]
//                     })
//             },
//             // Image Loader
//             {
//                 test: /\.(jpg|png|svg|gif)$/,
//                 use: [
//                     {
//                         loader: 'file-loader',
//                         options: {
//                             outputPath: './icons/',
//                             name: '[name].[hash:6].[ext]',
//                             publicPath: WP ? `/wp-content/themes/${THEME_NAME}/src/icons/` : '/src/icons/'

//                         }
//                     }
//                 ]
//             },
//             // Font Loader
//             {
//                 test: /\.(eot|ttf|woff|woff2)$/,
//                 use: [
//                     {
//                         loader: 'file-loader',
//                         options: {
//                             outputPath: './fonts/',
//                             name: '[name].[hash:6].[ext]',
//                             publicPath: WP ? `/wp-content/themes/${THEME_NAME}/src/fonts/` : '/src/fonts/'
//                         }
//                     }
//                 ]
//             },
//             // Font Loader
//             {
//                 test: /\.(mp4)$/,
//                 use: [
//                     {
//                         loader: 'file-loader',
//                         options: {
//                             outputPath: './video/',
//                             name: '[name].[hash:6].[ext]',
//                             publicPath: WP ? `/wp-content/themes/${THEME_NAME}/src/video/` : '/src/video/'
//                         }
//                     }
//                 ]
//             }
//         ]
//     },
//     plugins: [
//         {
//             apply: (compiler) => {
//                 if (!DEV_MODE) {
//                     rimraf.sync(compiler.options.output.path);
//                 }
//             }
//         },
//         new ExtractTextPlugin({
//             filename: 'css/[name]' + (DEV_MODE ? '.css' : '.[hash].min.css'),
//             disable: false,
//             allChunks: true
//         }),
//         new AssetsPlugin({
//             filename: 'assets.json',
//             path: path.resolve(__dirname, 'src')
//         })
//     ]
// };


// initHtmlPugs();

// function initHtmlPugs() {

//     for (let page in pugs) {
//         module.exports.plugins.push(new HtmlWebpackPlugin({
//             title: pugs[page].title,
//             filename: `${page}.html`,
//             chunks: [page, 'common'],
//             template: path.resolve(__dirname, 'assets/templates') + `/${page}.pug`,
//         }));
//     }
// }