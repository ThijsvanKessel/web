<?php
function HeaderThijs()
{
  ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">Thijs van Kessel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="https://www.thijsvankessel.nl">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Projects
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="web.php">Web Development</a>
            <a class="dropdown-item" href="application.php">Application Programming</a>
            <a class="dropdown-item" href="embedded.php">Embedded Systems</a>
            <a class="dropdown-item" href="protask.php">Protask</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="socialmedia.php">Social Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inc/CVThijs.pdf">CV</a>
        </li>
      </ul>
    </div>
  </nav>
<?php
}
?>