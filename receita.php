<?php

echo "kkkkkkkkkkkkkkkkk RETORNOU CERTO"

</html>
<style>
body,
html {
  height: 100%;
}
form {
  display: flex;
  flex-direction: column;
}

input {
  margin: 10px;
}

</style>
<body>
  <div class="criar">
    <form action="gabiru.php" method="POST">
      <input type="file" id="image" name="image">
      <input type="name" id="name" name="name">
      <textarea id="receita" name="receita" style="margin: 10px;"></textarea>
      <input type="submit" id="button" name="button">
    </form>
  </div>
</body>
</html>

?>
