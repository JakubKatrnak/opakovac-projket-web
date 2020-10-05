<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Kniha</th>
      <th scope="col">Autor</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($knihy_19_s as $k): ?>
      <tr>
            <td>
              <a data-toggle="tooltip" data-html="true" data-placement="left" title="<img src='<?php echo $k->prebal; ?>'/>"> <?php echo $k->nazev_knihy; ?> </a>      
            </td>
            <td> 
                <?php echo $k->autor; ?>
            </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>