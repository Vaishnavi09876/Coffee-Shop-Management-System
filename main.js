//active navbar

//nav hide

//counter design
document.addEventListener("DOMContentLoaded", () => {
  function counter(id, start, end, duration){
    let obj = document.getElementById(id),
    current = start,
    range = end - start,
    increment = end > start ? 1 : -1,
    step = Math.abs(Math.floor(duration / range)),
    timer = setInterval(() =>{
        current += increment;
        obj.textContent=current;
        if(current == end){
            clearInterval(timer);
        }
    }, step);
  }
  counter("count1", 0, 1287, 3000);
  counter("count2", 1234, 8563, 9362);
  counter("count3", 4355, 6754, 4389);
  counter("count4", 4572, 4673, 1200);
});