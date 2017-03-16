<?php
include "page/header.php";
?>
<main>

   <header>
      <h1>Ez egy borászatokat nyilvántartó weblap</h1>
   </header>

   <nav>
    <ul>
        <li>
            <a href="index.php?controller=bor&action=list">Borok listája</a>
        </li>
        <li>
            <a href="index.php?controller=boraszat&action=list">Borászat listája</a>
        </li>
        <li>
            <a href="index.php?controller=bor&action=create">Új bor</a>
        </li>
        <li>
            <a href="index.php?controller=boraszat&action=create">Új borászat</a>
        </li>
    </ul>
    </nav>
</main>

<?php
include "page/footer.php";
?>
