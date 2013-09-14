<?php
   switch($_POST['state']){
      case 'ac' :
      $capital = 'Rio Branco';
      $state = 'Acre';
      break;
      case 'al' :
      $capital = 'Maceió';
      $state = 'Alagoas';
      break;
      case 'ap' :
      $capital = 'Maceió';
      $state = 'Alagoas';
      break;
      case 'am' :
      $capital = 'Manaus';
      $state = 'Amazonas';
      break;
      case 'ba' :
      $capital = 'Salvador';
      $state = 'Bahia';
      break;
      case 'ce' :
      $capital = 'Fortaleza';
      $state = 'Ceará';
      break;
      case 'df' :
      $capital = 'Brasília';
      $state = 'Distrito Federal';
      break;
      case 'es' :
      $capital = 'Vitória';
      $state = 'Espírito Santo';
      break;
      case 'go' :
      $capital = 'Goiânia';
      $state = 'Goiás';
      break;
      case 'ma' :
      $capital = 'São Luís';
      $state = 'Maranhão';
      break;
      case 'mt' :
      $capital = 'Cuiabá';
      $state = 'Mato Grosso';
      break;
      case 'ms' :
      $capital = 'Campo Grande';
      $state = 'Mato Grosso do Sul';
      break;
      case 'mg' :
      $capital = 'Belo Horizonte';
      $state = 'Minas Gerais';
      break;
      case 'pr' :
      $capital = 'Curitiba';
      $state = 'Paraná';
      break;
      case 'pb' :
      $capital = 'João Pessoa';
      $state = 'Paraíba';
      break;
      case 'pa' :
      $capital = 'Belém';
      $state = 'Pará';
      break;
      case 'pe' :
      $capital = 'Recife';
      $state = 'Pernambuco';
      break;
      case 'pi' :
      $capital = 'Teresina';
      $state = 'Piauí';
      break;
      case 'rj' :
      $capital = 'Rio de Janeiro';
      $state = 'Rio de Janeiro';
      break;
      case 'rn' :
      $capital = 'Natal';
      $state = 'Rio Grande do Norte';
      break;
      case 'rs' :
      $capital = 'Porto Alegre';
      $state = 'Rio Grande do Sul';
      break;
      case 'ro' :
      $capital = 'Porto Velho';
      $state = 'Rondônia';
      break;
      case 'rr':
      $capital = 'Boa Vista';
      $state = 'Roraima';
      break;
      case 'sc' :
      $capital = 'Florianópolis';
      $state = 'Santa Catarina';
      break;
      case 'se' :
      $capital = 'Aracaju';
      $state = 'Sergipe';
      break;
      case 'sp' :
      $capital = 'São Paulo';
      $state = 'São Paulo';
      break;
      case 'to' :
      $capital = 'Palmas';
      $state = 'Tocantins';
      break;
   }
?>

<?php
   require('_header.php');
?>
<div class="span5">

   <table class="table table-bordered table-striped">
   <thead>
      <th>Estado</th>
      <th>Capital</th>
   </thead>
   <tbody>
      <td><?= $state ?></td>
      <td><?= $capital ?></td>
    </tbody>
 </table>

</div>
<?php
   require('_footer.php');
?>
