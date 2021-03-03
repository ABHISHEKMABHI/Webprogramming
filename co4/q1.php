<html>
<head>
 <title>Register Form</title>
</head>
<body>
<form action="" method="get">
<h2 align="center">Registration form</h2> <table >
<tr>
<td>First Name :</td>
<td><input type="text" name="Fname"></td>
</tr>
 <tr>
 <td>Second Name :</td>
 <td><input type="text" name="Sname"></td>
 </tr>
 <tr>
 <td>Age :</td>
 <td><input type="text" name="age"></td>
  </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="Gender"> Male
     <input type="radio" name="Gender"> Female
    </td>
   </tr>
   <tr>
   <td>Address :<td><textarea cols="10" rows="5" name="address"></textarea></td>
  </td>
   </tr>
 <tr>
    <td>Country</td>
    <td>
     <select>
      <option>India</option>
      <option>Australia</option>
      <option>Belgium</option>
      <option>Italy</option>
      <option>UAE</option>
     </select>
    </td>
   </tr>
   <tr>
<td>Languages Known</td>
<td>
     <input type="checkbox", checked/>English
</td> 
</tr>
<tr>
<td></td>
<td>
   <input type="checkbox", checked/>Malayalam
</td>
</tr>
<tr>
<td></td>
<td>
   <input type="checkbox", checked/>Hindi
</td>
</tr>
   <tr>
    <td>User ID :</td>
    <td><input type="email"></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password"></td>
   </tr>
   <tr>
    <td>Renter Password :</td>
    <td><input type="password"></td>
   </tr>
   <tr>
    <td>Qualification :</td>
    <td>
     <select>
      <option>MCA</option>
      <option>Msc</option>
      <option>Mtech</option>
      <option>BCA</option>
      <option>Bsc</option>
     </select>
    </td>
   </tr>
<tr>
<td>Terms and conditions:</input></td>
<td>
<input type="radio" name="t&c" /> I Agree
<input type="radio" name="t&c" /> Don't Agree
</td>
</tr>
   <tr>
    <td><input type="submit" value="Submit"></td>
    <td><input type="reset" value="clear"></td>
   </tr>
  </table>
 </form>
</body>
</html>
