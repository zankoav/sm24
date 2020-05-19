/**
 *  mixin lazyImage(className, srcMobile, srcLaptop, srcDesktop, alt )
        img(class=`${className} lz-loading`,
            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
            data-src-m=srcMobile,
            data-src-sm=srcLaptop,
            data-src-lg=srcDesktop,
            data-alt=alt)
 */

(function () {
    const IMAGE_SELECTOR = 'lz-loading';
    const IMAGE_LOADED = 'lz-loaded';
    const WIDTH_RESOLUTION = {
        m: 320,
        sm: 768,
        lg: 1280
    };
    let images,
        scrollTop = document.body.scrollTop,
        resolution = getResolution();

    document.addEventListener("DOMContentLoaded", () => {
        images = document.body.querySelectorAll(IMAGE_SELECTOR);
        loadImagesInViewPort();
    });

    window.addEventListener("resize", () => {
        resolution = getResolution();
        images.forEach(img => {
            if (img.classList.indexOf(IMAGE_LOADED) > -1) {
                img.src = img.getAttribute(`data-src-${resolution}`);
            }
        });
        loadImagesInViewPort();
    });

    window.addEventListener('scroll', () => {
        // scrollTop = ;
        console.log('scrollTop', document.body.scrollHeight, document.body.offsetHeight, window.pageYOffset);
        if (images) {
            loadImagesInViewPort();
        }
    });

    function loadImagesInViewPort() {
        const potentialImages = Array.from(images).filter(img => (
            img.classList.indexOf(IMAGE_LOADED) === -1 && imageVisible(img)
        ));
        if (potentialImages) {
            potentialImages.forEach(img => {
                if (img.classList.indexOf(IMAGE_LOADED) === -1) {
                    img.src = img.getAttribute(`data-src-${resolution}`);
                    img.classList.add(IMAGE_LOADED);
                }
            });
        }
    }

    // function getScrollHeight() {
    //     return Math.max(
    //         document.body.scrollHeight, document.documentElement.scrollHeight,
    //         document.body.offsetHeight, document.documentElement.offsetHeight,
    //         document.body.clientHeight, document.documentElement.clientHeight
    //     );
    // }

    function imageVisible(img) {

    }

    function getResolution() {
        let resolution = 'lg';
        width = window.screen.width;

        if (width < WIDTH_RESOLUTION.sm) {
            resolution = 'm';
        } else if (width < WIDTH_RESOLUTION.m) {
            resolution = 'sm';
        }

        return resolution;
    }

})();