jQuery(document).ready(function ($) {
    if ($('#map').length > 0) {
        ymaps.ready(init);
        var myMap,
            myPlacemark;

        function init() {
            myMap = new ymaps.Map("map", {
                center: [59.962115, 30.317611],
                zoom: 17
            });
            myMap.container.fitToViewport();

            myPlacemark = new ymaps.Placemark([59.962115, 30.317611], {
                hintContent: 'БалканскийГурман'
            }, {
                preset: 'islands#redDotIcon'
            });

            myMap.geoObjects.add(myPlacemark);
            myMap.behaviors.disable('scrollZoom');
        }
    }
});