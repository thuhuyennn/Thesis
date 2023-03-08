#include <Wire.h>
#include "MAX30100_PulseOximeter.h"
#include <ESP8266WiFi.h>

// Replace with your network credentials
const char* ssid = "Phu An House L3.2";
const char* password = "7777999";

// Replace with your server address
const char* serverAddress = "192.168.32.105";

// Initialize the MAX30100 sensor
PulseOximeter pox;

void setup() {
  // Connect to Wi-Fi network
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
  }

  // Initialize MAX30100 sensor
  pox.begin();
}

void loop() {
  // Update sensor data
  pox.update();

  // Get heart rate and SpO2 values
  float hr = pox.getHeartRate();
  float spo2 = pox.getSpO2();
  Serial.println(hr);
   Serial.println(spo2);
  

  // Create JSON data string
  String data = "{\"heart_rate\":" + String(hr) + ",\"spo2\":" + String(spo2) + "}";

  // Send data to server
  WiFiClient client;
  if (client.connect(serverAddress, 80)) {
    client.println("POST /data HTTP/1.1");
    client.println("Host: " + String(serverAddress));
    client.println("Content-Type: application/json");
    client.println("Content-Length: " + String(data.length()));
    client.println("Connection: close");
    client.println();
    client.println(data);
  }

  delay(1000);
}
