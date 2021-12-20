<?php

$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim assumenda distinctio neque reiciendis eligendi magni consequatur ut ad nulla tempore sunt nemo cupiditate eaque sapiente voluptatum voluptatibus, accusantium pariatur. Temporibus sunt asperiores ab nam amet minus tempore sequi veniam voluptatem fugit optio, enim repellendus! Omnis laborum deleniti eaque maiores totam dicta sunt autem reprehenderit non eum est, aut maxime labore saepe perspiciatis consequatur quisquam ea deserunt consequuntur nesciunt distinctio amet nihil aperiam tempora. Fugit dignissimos officiis odio aperiam, praesentium, qui deleniti atque expedita corporis temporibus in quisquam totam non optio corrupti quidem adipisci? Iusto explicabo eligendi sed, porro vel saepe voluptatum modi non ex repellat. Iusto quaerat, adipisci cumque nulla temporibus, maiores facere ipsum ab esse vitae, atque est labore debitis iste magnam. Iusto modi ut amet nulla nobis provident ipsam cupiditate veniam? Non dolores nam enim. Tenetur quaerat officiis quam, harum sint, placeat eveniet quos nostrum ullam ipsam aperiam ea labore fuga excepturi? Quae repudiandae laborum rem ut minus voluptatibus consequatur error, odio quos, officia vel veritatis ipsa unde! Laboriosam assumenda eum omnis numquam quod aut, adipisci rerum delectus illum voluptas obcaecati corrupti sit officia doloribus et id, minima possimus sint! Expedita, laborum culpa? Cupiditate aspernatur repellendus eveniet sint, temporibus quae sequi! Est debitis delectus, ipsam obcaecati sed cum explicabo quisquam natus nisi voluptatibus et qui asperiores quod fugiat minus quis, sit voluptatem dolores iusto tempora temporibus deserunt odio assumenda reiciendis! Provident soluta alias ab, eaque nihil expedita vitae harum, commodi facere animi eius? Eius amet perferendis nemo tempore eligendi excepturi rem, voluptates nisi optio magnam, aperiam vero quidem consequuntur repudiandae delectus sint ullam! Aliquam quos recusandae similique, hic nisi rerum asperiores excepturi voluptatibus repellendus accusamus quasi deserunt atque, commodi ex iste? Obcaecati aliquam est cupiditate pariatur debitis sequi assumenda. Quos esse consequatur deserunt, aperiam laboriosam dolorem incidunt id.';

echo $text;

echo "<h2>Testo suddiviso:</h2>";

$p = explode('.', $text);
for ($i=0; $i < count($p); $i++) { 
  if (!empty($p[$i])) {
    echo "<p>$p[$i].<br></p>";
  }
}


?>