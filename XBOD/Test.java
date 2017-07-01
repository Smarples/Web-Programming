public class Test {
  public static void main(String argv[]) throws Exception {
    CGI cgi = new CGI();
    System.out.println("Content-type: text/html\n");
    System/out.println("<!DOCTYPE html><html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\"><link rel=\"stylesheet\" type=\"text/css\" href=\"general.css\"><meta charset=\"utf-8\" /><link rel=\"shortcut icon\" href=\"favicon.ico\" />		 <title>XBOD </title>    <h1> Your Basket </h1>")


    String fname = cgi.getvalue("fname");
    String lname = cgi.getvalue("lname");
    String address = cgi.getvalue("address");
    String city = cgi.getvalue("city");
    String postcode = cgi.getvalue("postcode");
    String email = cgi.getvalue("email");


	System.out.println( "<p> Your Name is: " + fname + " " + lname + " and you live at " + address + " in " + city + " and your postcode is " + postcode + "</p>");
	System.out.println( "<p> A confirmation email will be sent to: " + email + "</p>");

	System.out.println("<div id=\"sidebarDiv\"><div id=\"content\"><a href=\"home.html\"><img src=\"homeb.png\" alt=\"Home Button\" /></a><p></p><a href=\"games.html\">Games</a><p></p><a href=\"consoles.html\">Consoles</a><p></p><a href=\"misc.html\">Miscellaneous</a><p></p><a href=\"about.html\">About Us</a><p></p><a href=\"basket.html\">Basket</a></div></div>")
    }
  }
}
