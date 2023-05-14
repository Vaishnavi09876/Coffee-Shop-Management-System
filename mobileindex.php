<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Mobile Shop</title>
  </head>
  <body>
    <div class="all-content">
    <!--navbar start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Samsung</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Mobile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">TV & AV</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Displays</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Accessories</a>
      </li>
    </ul>
  </div>
</nav>
    <!--navbar end-->
    <div class="carousel3d">
  <div class="items" style="--items-total: 5">
    <div class="item" style="--item-index: 0">
      <img src="https://picsum.photos/1920/1080?random=1" alt="">
    </div>
    <div class="item" style="--item-index: 1">
      <img src="https://picsum.photos/1920/1080?random=2" alt="">
    </div>
    <div class="item" style="--item-index: 2">
      <img src="https://picsum.photos/1920/1080?random=3" alt="">
    </div>
    <div class="item" style="--item-index: 3">
      <img src="https://picsum.photos/1920/1080?random=4" alt="">
    </div>
    <div class="item" style="--item-index: 4">
      <img src="https://picsum.photos/1920/1080?random=5" alt="">
    </div>
  </div>
</div>


<!-- warning not supported -->
<div class="trigwarning">This browser is not supported... yet. CSS Trigonometry is currently supported in Safari, Firefox, and Chrome Canary with the "Experimental Web Platform Features" flag enabled.</div>

<!-- for demo: add/remove items and adjust spacing -->
<div class="ctrls">
  <label>Items</label><label>Spacing</label>
  <input type="range" value="5" min="3" max="10" oninput="updateItems(this)">
  <input type="range" value="0" min=0 max="10" oninput="updateSpacing(this)">
</div>

<script>
  function updateSpacing(e){
    const n = parseInt(e.value);
    if(n < 0 || n > 10) return;
    const itemsEl = document.querySelector(".items");
    itemsEl.style.setProperty("--spacing", n + 'vmin');
  }
  function updateItems(e){
    const n = parseInt(e.value)
    if(n < 3 || n > 10) return;
    const itemsEl = document.querySelector(".items");
    itemsEl.style.setProperty("--items-total", n);
    itemsEl.innerHTML = "";
    for(let i = 0; i < n; i++){
      const item = document.createElement("div");
      item.classList.add("item");
      item.style.setProperty("--item-index", i);
      item.innerHTML = `<img src="https://picsum.photos/1920/1080?random=${i+1}" alt="">`
      itemsEl.append(item)
    }
  }
</script>


    

</body>
</html>