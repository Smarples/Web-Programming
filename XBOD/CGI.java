import java.io.*;
import java.util.*;

public class CGI {
  HashMap<String,ArrayList<String>> h =
                        new HashMap<String,ArrayList<String>>();

  public CGI() {
    String qs = System.getenv("QUERY_STRING");
    String rm = System.getenv("REQUEST_METHOD");
    if ( rm.equals("POST") ) CgiData(System.in);
    else CgiData(new ByteArrayInputStream(qs.getBytes()));
  }

  public String[] getValues(String s) {
    ArrayList<String> al = h.get(s);
    if ( al == null ) return null;
    return al.toArray(new String[al.size()]);
  }

  public String getValue(String s) {
    String[] a = getValues(s);
    if ( a == null || a.length == 0 ) return null;
    else return a[0];
  }

  public String[] getNames() {
    Set<String> s = h.keySet();
    if ( s == null ) return null;
    return s.toArray(new String[s.size()]);
  }

  private void CgiData(InputStream cgiData) {
    String s = ""; int c;
    StringBuffer buf = new StringBuffer();
    try { while ( ( c = cgiData.read() ) != -1 ) {
            switch ( c ) {
              case '=' : s = buf.toString();
                          buf.setLength(0);
                          break;
              case '&' :
              case '\n' : addNameValue(s, buf.toString());
                          buf.setLength(0);
                          break;
              case '+' : buf.append(" "); break;
              case '%' : int d1 = cgiData.read();
                          int d2 = cgiData.read();
                          c = Character.digit((char)d1, 16)*16 +
                              Character.digit((char)d2, 16);
              default : buf.append((char)c); }
          }
    } catch (IOException exc) {}
    addNameValue(s, buf.toString());
  }
 
  private void addNameValue(String name, String value) {
    if ( name.equals("") ) return;
    ArrayList<String> a = h.get(name);
    if ( a == null ) { a = new ArrayList<String>(); h.put(name, a); }
    a.add(value);
  }
}
