    <html>
    <head>
    <script type="text/javascript">
  
    
    var a=document.forms["reg"]["name"].value;
  
    var g=document.forms["reg"]["username"].value;
    var h=document.forms["reg"]["password"].value;
    if ((a==null || a=="") && (g==null || g=="") && (h==null || h==""))
      {
      alert("All Field must be filled out");
      return false;
      }
    if (a==null || a=="")
      {
      alert("Name must be filled out");
      return false;
      }
    if (g==null || g=="")
      {
      alert("Email must be filled out");
      return false;
      }
    if (h==null || h=="")
      {
      alert("Password must be filled out");
      return false;
      }
    
    </script>
  </head>

    <form name="simple_login" action="code_exec.php" onsubmit="return validateForm()" method="post">
    <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td colspan="2">
    		<div align="center">
    		  <?php 
    		$remarks=$_GET['remarks'];
    		if ($remarks==null and $remarks=="")
    		{
    		echo 'Sign Up';
    		}
    		if ($remarks=='success')
    		{
    		echo 'Registration Success';
    		}
    		?>	
    	    </div></td>
      </tr>
      <tr>
        <td width="95"><div align="right">Name:</div></td>
        <td width="171"><input type="text" name="name" /></td>
      </tr>
      
 
     <tr>
        <td><div align="right">Username:</div></td>
        <td><input type="text" name="username" /></td>
      </tr>
     <tr>
        <td><div align="right">Password:</div></td>
        <td><input type="text" name="password" /></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><input name="Sign Up" type="submit" value="Submit" /></td>
      </tr>
    </table>
    </form>
    
    
    </html>
