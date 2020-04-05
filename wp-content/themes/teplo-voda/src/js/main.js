    jQuery(document).ready(function($) {
            $('#icon-menu').slick({
            dots: false,
            infinite: true,
            speed: 300,
            arrows: true,
            slidesToShow: 8,
            slidesToScroll: 1,
            draggable: true,
            touchMove: true,
            prevArrow: $('.nav_icon_prev'),
            nextArrow: $('.nav_icon_next'),
            swipe: true,
            adaptiveHeight: true,
                responsive: [
                    {
                        breakpoint: 400,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },

                    {
                        breakpoint: 1140,
                        settings: {
                            slidesToShow: 6,
                            slidesToScroll: 1
                        }
                    }
                ]
        });

    });

    jQuery(document).ready(function($) {
        $('.redomended_items_title_content').slick({
            dots: true,
            infinite: true,
            speed: 300,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            touchMove: true,
            autoplay: true,
            autoplaySpeed: 4000,
            swipe: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },

                {
                    breakpoint: 1140,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 1
                    }
                }
            ]
        });

    });




