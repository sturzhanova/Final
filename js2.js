var xArray = [1999,2000,2002,2005,2006,2007,2010,2015,2017,2019,2022];
var yArray = [7,8,8,9,9,9,10,11,14,14,15];

// Define Data
var data = [{
  x: xArray,
  y: yArray,
  mode:"lines"
}];

// Define Layout
var layout = {
  xaxis: {range: [1999, 2022], title: "год"},
  yaxis: {range: [5, 16], title: "продаваемость"},  
  title: " Продаваемость Камри"
};

// Display using Plotly
Plotly.newPlot("myPlot", data, layout);