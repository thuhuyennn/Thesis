#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>


WiFiClient wifiClient;

/* Set these to your desired credentials. */
const char *ssid = "Phu An House L3.2";  //ENTER YOUR WIFI SETTINGS
const char *password = "77779999";

//Web/Server address to read/write from
const char *host = "192.168.32.100";   //https://circuits4you.com website or IP address of server


//=======================================================================
//                    Power on setup
//=======================================================================

void setup() {
  delay(1000);
  Serial.begin(115200);
  

  WiFi.mode(WIFI_OFF);        //Prevents reconnection issue (taking too long to connect)
  delay(1000);
  WiFi.mode(WIFI_STA);        //This line hides the viewing of ESP as wifi hotspot

  WiFi.begin(ssid, password);     //Connect to your WiFi router
  Serial.println("");

  Serial.print("Connecting");
  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  //If connection successful show IP address in serial monitor
  Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());  //IP address assigned to your ESP
}

//=======================================================================
//                    Main Program Loop
//=======================================================================
void loop() {
    // Đọc chuỗi từ Arduino qua giao thức UART
    String dataString = "";
    if (Serial.available()) {
      dataString = Serial.readString();
      Serial.println(dataString);
      dataString.trim();
      
    }
    // Tách chuỗi thành các giá trị 
    float heartbeat,concentration;
  
    int commaIndex1 = dataString.indexOf(",");
    int commaIndex2 = dataString.indexOf(",", commaIndex1 + 1);
    if (commaIndex1 != -1 && commaIndex2 != -1) {
      heartbeat = dataString.substring(0, commaIndex1).toFloat();
      concentration = dataString.substring(commaIndex1 + 1, commaIndex2).toFloat();
 
    }
  
  HTTPClient http;  //Declare object of class HTTPClient

  //Post Data
  String postData ="heartbeat=" + String(heartbeat) + "&concentration=" + String(concentration);


  http.begin(wifiClient, "http://192.168.32.104/Thesis/WebInterFace/src/postdata.php");             //Specify request destination
  http.addHeader("Content-Type", "application/x-www-form-urlencoded");    //Specify content-type header

  int httpCode = http.POST(postData);   //Send the request
  String payload = http.getString();    //Get the response payload

  Serial.println(httpCode);   //Print HTTP return code
  Serial.println(payload);    //Print request response payload

  http.end();  //Close connection

  delay(500);  //Post Data at every 5 seconds
}
