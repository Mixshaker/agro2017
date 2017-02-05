var data1 = {
  series: [6008, 3534, 3357, 2827, 1415, 530]
};

var data2 = {
  series: [417, 290, 235, 144, 121, 101, 65, 48, 20]
};

var options = {
  labelInterpolationFnc: function(value) {
    return value[0]
  }
};

var responsiveOptions = [
  ['screen and (min-width: 640px)', {
    chartPadding: 30,
    labelOffset: 100,
    labelDirection: 'explode',
    // labelInterpolationFnc: function(value) {
    //   return value;
    // }
  }],
  ['screen and (min-width: 1024px)', {
    labelOffset: 80,
    chartPadding: 20
  }]
];

new Chartist.Pie('#graf1', data1, options, responsiveOptions);
new Chartist.Pie('#graf2', data2, options, responsiveOptions);