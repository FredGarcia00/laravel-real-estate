<div class="content">
    <div class="content__title">
      <h5>Luxury Real Estate</h5>
        <h1>Exclusive properties</h1>
    </div>
    <div class="content__wrapper">
      <a href="#" style="text-decoration: none">
      <div class="card" style="width: 22rem;height:25rem;">
            <img src="img/color.png" class="card-img-top img" alt="...">
            <div class="card__overlay">
              <div>Luxury LA home</div>
              <div class="card__overlay__info">3 beds 2 bath 1400sf</div>
            </div>
            <div class="card-body" style="color:#000">
              <p class="card-text">Located in Los Angeles.</p>
            </div>
          </div>
        </a>
        <a href="#" style="text-decoration: none">
          <div class="card" style="width: 22rem;height:25rem;">
            <img src="img/la.png" class="card-img-top img" alt="...">
            <div class="card__overlay">
              <div>Luxury  Beverely Hills Home</div>
              <div class="card__overlay__info">7 beds 5 bath 3600sf</div>
            </div>
            <div class="card-body" style="color:#000">
              <p class="card-text">See this exclusive Beverely hills home before it hits the market</p>
            </div>
          </div>
        </a>
        <a href="#" style="text-decoration: none">
          <div class="card" style="width: 22rem;height:25rem;;">
              <img src="img/lux.png" class="card-img-top img" alt="...">
              <div class="card__overlay">
                <div>Luxury LA home</div>
                <div class="card__overlay__info">4 beds 3 bath 1500sf</div>
              </div>
              <div class="card-body" style="color:#000">
                <p class="card-text">Located in Los Angeles, California</p>
              </div>
            </div>
        </a>

    </div>
    <div class="content__choose">
      <div class="content__chooseContent">
        <h5>stats</h5>
        <h1>Why work with us</h1>
        <div class="content__proof">
          <ul>
            <li>$5B+</li>
            <li><h4>Sold</h4></li>
          </ul>
          <ul>
            <li>#1</li>
            <li><h4>Trends by volume</h4></li>
          </ul>
          <ul>
            <li>1M+</li>
            <li><h4>instagram followers</h4></li>
          </ul>
        </div>
      </div>
    </div>
</div>

<style>
    h1 {
      color:#fff;
      text-transform:uppercase;
    }
    h5 {
      text-transform:uppercase;
      color:#fff;
    }
    .content {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color:#grey;
        font-family: 'Open Sans', sans-serif;
        background:#000;
    }


    .content__title {
      padding: 20px;
    }
    .content__wrapper {
        display: grid; 
        grid-template-columns:repeat(3,360px);
        margin-bottom: 100px;
    }

    .card {
      cursor: pointer;
      border: 2px solid transparent;
    }

    .card:hover {
     border:2px solid gold;
    }
    .img {
      height: 300px;
    }

    .card__overlay {
      position:absolute;
      background: rgba(0, 0,0,.3);
      z-index: 1;
      font-size: 1.3rem;
      display:flex;
      flex-direction: column;
      align-items: center;
      transition: .9s ease-in-out;
      color:#fff;
      width: 100%;
      height: 100%;
      opacity: 0;
    }

    .card__overlay:hover {
      opacity:1;
    }

    .card__overlay__info {
     transform: translateY(180px);

    }

    .content__choose {
      background:linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.4)),url('img/c.jpg') ;
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
      display:flex;
      justify-content:center;
      color:#fff;
      width:100%;
      height:50vh;
    }

    .content__chooseContent {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .content__chooseContent h5 {
      color:rgb(255, 255, 255);
    }

    .content__chooseContent h1 {
      font-size: 3rem;
      margin-bottom: 35px;
      color:#fff;
      font-weight: 600;
    }
    .content__proof {
      display:flex;
    }

    .content__proof ul {
      border-right: 1.5px solid lightgrey;
    }

    .content__proof ul li {
      font-size: 2rem;
      font-weight: 600;
      margin-right: 10px;
    }


    @media (min-width: 1px) and (max-width: 575px)  {
      .content__wrapper {
      display: flex;
      flex-direction: column;
      width: 100%;
      }

      .content__chooseContent h1 {
        font-size: 1.7rem;
      }
    }
</style>