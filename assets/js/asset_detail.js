// config
var chart = RadarChart.chart();
chart.config({
  containerClass: 'radar-chart', // target with css, the default stylesheet targets .radar-chart
  w: 150,
  h: 150,
});
var data = [
  {
    className: 'radar-chart', // optional, can be used for styling
    axes: [
      {axis: "เดินทาง", value: 5},
      {axis: "ความกว้าง", value: 2},
      {axis: "charisma", value: 4},  
      {axis: "dexterity", value: 4},  
      {axis: "luck", value: 1},
      {axis: "ความกว้าง", value: 2},
      {axis: "charisma", value: 4},  
      {axis: "dexterity", value: 4}
    ]
  }
];

var svg = d3.select('#radar-chart').append('svg');

// draw one
svg.append('g').classed('focus', 1).datum(data).call(chart);
