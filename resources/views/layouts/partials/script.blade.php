
 <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
     <script>
        $(document).ready(function () {
            $('#examplesilder .owl-carousel').owlCarousel({
                loop: false,
                nav: true,
                dots: false,
                items: 1,
                onInitialized: counter1, //When the plugin has initialized.
                onTranslated: counter1 //When the translation of the stage has finished.
            })
            $('#examplevideo .owl-carousel').owlCarousel({
                loop: false,
                nav: true,
                dots: false,
                items: 1,
                onInitialized: counter2, //When the plugin has initialized.
                onTranslated: counter2 //When the translation of the stage has finished.
            })
            function counter1(event) {
                var element = event.target;         // DOM element, in this example .owl-carousel
                var items = event.item.count;     // Number of items
                var item = event.item.index + 1;     // Position of the current item
                let allIframe = document.querySelectorAll("iframe")
                allIframe.forEach(frame => {
                    frame.src = frame.src
                });

                // it loop is true then reset counter from 1
                if (item > items) {
                    item = item - items
                }
                $('#examplesilder #counter').html( item + "/" + items)
            }
            function counter2(event) {
                var element = event.target;         // DOM element, in this example .owl-carousel
                var items = event.item.count;     // Number of items
                var item = event.item.index + 1;     // Position of the current item
                let allIframe = document.querySelectorAll("iframe")
                allIframe.forEach(frame => {
                    frame.src = frame.src
                });

                // it loop is true then reset counter from 1
                if (item > items) {
                    item = item - items
                }
                $('#examplevideo #counter').html( item + "/" + items)
            }
        })
    </script>
