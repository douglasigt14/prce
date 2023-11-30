function makesvg(percentage, previsao="", title) {
    var abs_percentage = Math.abs(percentage).toString();
    var percentage_str = percentage.toString();
    var classes = "";
    var svg = '';

    if (previsao != "") {
        var svg = '<svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" xmlns="http://www.w3.org/2000/svg">'
        + '<circle class="circle-chart__circle '+classes+'"'
        + 'stroke-dasharray="'+ abs_percentage+',100" cx="16.9" cy="16.9" r="15.9" />'
        + '<g class="circle-chart__info">'
        + '<text class="circle-chart__subline" x="16.91549431" y="8">STATUS ATUAL</text>'
        + '<text class="circle-chart__subline" x="16.91549431" y="10">DA OBRA:</text>'
        + '<text class="circle-chart__percent" x="17.9" y="15.5">'+percentage_str+'%</text>'
        + '<text class="circle-chart__subline" x="16.91549431" y="22">PREVISÃO DE CONCLUSÃO</text>'
        + '<text class="circle-chart__subline" x="16.91549431" y="24">'+previsao+'</text>'
        + ' </g></svg>';
    } else {
        var svg = '<svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" xmlns="http://www.w3.org/2000/svg">'
        + '<circle class="circle-chart__circle '+classes+'"'
        + 'stroke-dasharray="'+ abs_percentage+',100" cx="16.9" cy="16.9" r="15.9" />'
        + '<g class="circle-chart__info">'
        + '<text class="circle-chart__title" x="16.91549431" y="11">'+title+'</text>'
        + '<text class="circle-chart__percent" x="17.9" y="19">'+percentage_str+'%</text>'
        + ' </g></svg>';
    }
  
  return svg
}

(function( $ ) {

    $.fn.circlechart = function() {
        this.each(function() {
            var percentage = $(this).data("percentage");
            var previsao = $(this).data("previsao");
            var title = $(this).data("title");
            $(this).html(makesvg(percentage, previsao, title));
        });
        return this;
    };

}(jQuery));