<?php include 'includes/header.php'; ?>
<div class="l-grid--contain c-background">
    <h1 class="c-menu-header">Location</h1>
    <p class="c-locate-header">Address: 142 Park City Center E441, Lancaster, PA 17601</p>
    <p class="c-locate-header">Hours of Operation: Monday - Friday 5:30am-10pm<br>Saturday - Sunday 6:30am-9pm<p>
    <div class="c_map">
    <iframe src="https://www.google.com/maps/embed?pb=" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    
  
    <form class="form" action="mail.php" method="post">
        <div class="form__row">
            <input class="form__input name" type="text" name="name" required="" placeholder="NAME">
            <input class="form__input email" type="email" name="email" required="" placeholder="EMAIL">
            <input class="form__input phone" type="text" name="phone" required="" placeholder="PHONE">
        </div>
        <textarea class="form__textarea message" name="message" required="" id="" cols="30" rows="10" placeholder="MESSAGE"></textarea>
        <button class="form__button">send message</button>
    </form>



</div>


<?php include 'includes/footer.php'; ?>