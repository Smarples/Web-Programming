public class basket {
  public static void main(String argv[]) throws Exception {
    CGI cgi = new CGI();
    System.out.println("Content-type: text/html\n");
    System.out.println("<!DOCTYPE html><html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\"><link rel=\"stylesheet\" type=\"text/css\" href=\"http://www2.macs.hw.ac.uk/~sm861/general.css\"><meta charset=\"utf-8\" /><link rel=\"shortcut icon\" href=\"favicon.ico\"/><title>XBOD</title><h1> Basket </h1>");


    String[] games = cgi.getValue("games");
    String[] prices = cgi.getValue("prices");
			
System.out.println("<p>" + "Thank you for purchasing " + games + "</p>");


	System.out.println( "<p> <b>Name:</b> " + "<em>" + fname + "</em>" + " " + "<em>" + lname + "</em>" + "</p>" + "<p>" + " <b>Address:</b> " + "<em>" + address + "</em>" + ", " + "<em>" + city + "</em>" + ", " + "<em>" + postcode + "</em>" + "</p>");
	System.out.println( "<p> A confirmation email will be sent to " + "<em>" + " <b> " + email + "</b>" + "</em>" + "</p>");

	System.out.println("<div id=\"sidebarDiv\"><div id=\"content\"><a href=\"http://www2.macs.hw.ac.uk/~sm861/home.html\"><img src=\"http://www2.macs.hw.ac.uk/~sm861/homeb.png\" alt=\"Home Button\" /></a><p></p><a href=\"http://www2.macs.hw.ac.uk/~sm861/games.html\">Games</a><p></p><a href=\"http://www2.macs.hw.ac.uk/~sm861/consoles.html\">Consoles</a><p></p><a href=\"http://www2.macs.hw.ac.uk/~sm861/misc.html\">Miscellaneous</a><p></p><a href=\"http://www2.macs.hw.ac.uk/~sm861/about.html\">About Us</a><p></p><a href=\"http://www2.macs.hw.ac.uk/~sm861/basket.html\">Basket</a></div></div>");
    
  }
}
