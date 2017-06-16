$(function(){
  $('.demo1').easyTicker({
    direction: 'up',
    easing: 'swing'
  });
  
  
  
  $('.demo3').easyTicker({
    visible: 1,
    interval: 4000
  });
  
  
  $('.demo5').easyTicker({
    direction: 'up',
    visible: 3,
    interval: 2500,
    controls: {
      up: '.btnUp',
      down: '.btnDown',
      toggle: '.btnToggle'
    }
  });
});