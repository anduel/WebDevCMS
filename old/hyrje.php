<div id="permbajtja">

<?php $var1= 'Shkolla'; $var2='Kursi'; ?>
<?php $var3=  '<p>Me Pelqen dhe ' .$var1. ' edhe ' .$var2. '<p>'  ;?>
<?php echo $var3 ?>


<pre>
<?php $emrat= array ('Eri' , 'Anduel' , 'Ervin' , 'Klevi') ;  // liste numerike 1dimensionale  
print_r( $emrat );
echo $emrat[3]; 
echo $emrat[2];
?>
</pre>




<p> ky eshte nje <b>test</b> <s>dhe do te</s> <i>kaloj</i> ne nje  <br> <u>rresht</u> te ri <hr> dmth 
<strong>nje</strong>
 <em>test</em> i ri </p>
 
 <table width="100%" border="1" >
 
<thead>
 <tr class="fillimi"> 
 <td width="6%"> Nr.</td>
 <td> Emri </td>
 <td> Mbiemri </td>
 <td> Nota </td> 
 </tr>
</thead>
 
<tbody>
 <tr>
 <td> 1</td>
 <td> Anduel </td>
 <td> Mehmeti </td>
 <td> 9 </td> 
 </tr>

 <tr>
 <td> 2</td>
 <td> Ervin </td>
 <td> Skendaj </td>
 <td> 8 </td> 
 </tr>
 
  <tr>
 <td> 3</td>
 <td> Klevin </td>
 <td> Kona </td>
 <td> 7 </td> 
 </tr>
 
   <tr>
 <td> 4</td>
 <td> Smart </td>
 <td> Center </td>
 <td> 7 </td> 
 </tr>
 </tbody>

 <tfoot> 
 <tr class="fundi"> 
 <td colspan="3" class="mesatare">  Mesatarja  </td>
 <td> 7.75</td> 
 </tr>
 </tfoot> 
 </table>
 
 <form>
 <fieldset>
 <legend> Informacione Baze</legend>
 
 <label for="emri">
  Emri<br>
 <input type="text" name="emri" value="">
 </label>
 <label for="email">
  Email<br>
 <input type="text" name="email" value="">
 </label>
<label for="password">
Password <br>
 <input type="password" name="password" value="">
</label>
 </label>
  </fieldset>
 <fieldset>
 <legend> Informacion Shtese </legend>
 <label for="vlore">
 <input type="radio" name="Vlore" id="vlore" value="Vlore">Vlore<br> </label> <!-- value sherben per php, e lexon php -->
 <label for="fier">
 <input type="radio" name="fier" id="fier" value="fier">Fier<br> </label>  <!-- per te selektuar me ane te emrit edhe butonin ndaj hapet nje 
                                                                            label me  for="" dhe me id tek inputi te njejte qe te njihet
 																			butoni ashtu dhe emri pjese e njejte-->
 <label for="durres">
 <input type="radio" name="durres" id="durres" value="durres">Durres<br> </label>

 <label for="vlora">
 <input type="checkbox" name="vlore" id="vlora" value="vlore">vlore<br> </label>
 <label>
 <input type="checkbox" name="fier" id="fier" value="fier">Fier<br> </label>
 <label>
 <input type="checkbox" name="durres" id="durres" value="durres">Durres<br> </label> 
 <label for="selectbox">
<select>
<option>Vlore -- VL</option>
<option>Fier -- FR</option>
<option>Durres -- DR</option>
</select>
</label>
 </fieldset>
<label for="subjekti"> 
 Subjekti<br>
 <textarea name="subjekti" value="">
 </textarea> <br>
 <input type="submit" value="Dergo"> 
 </form>

<ul class="a">
<li> faza e pare </li>
<li> faza e dyte </li>
<li> faza e trete </li>
<li> faza e katert </li>
</ul>

<ol>
<li id="nje"> faza e pare </li>
<li id="dy"> faza e dyte </li>
<li id="tre"> faza e trete </li>
<li id="kater"> faza e katert </li>
</ol>



</div> <!-- permbajtja-->