#include <LiquidCrystal_I2C.h>  //#include < Wire .h> we are removing this because it is already added in liquid crystal library
#include "MAX30100_PulseOximeter.h"

#include <SoftwareSerial.h>
#define Rx 2
#define Tx 3
#define BUZZERPIN 4

SoftwareSerial mySerial(2, 3);


//giao tiep voi sim800l

SoftwareSerial sim800l(10, 11);



// Create the lcd object address 0x27 and 16 columns x 2 rows
LiquidCrystal_I2C lcd(0x27, 16, 2);  //we can find the address through I2C address scanner

#define REPORTING_PERIOD_MS 1000

PulseOximeter pox;
uint32_t tsLastReport = 0;

int count = 0;

// void Sendmsg() {
//   sim800l.println("AT+CMGF=1");  // Configuring TEXT mode
//   delay(25);
  
//   sim800l.println("AT+CMGS=\"+84363350371\"");  
//   delay(25);

//   sim800l.print("Nhip tim qua cao:");
//   sim800l.print(heartbeat);  //text content
//   delay(25);
//   //updateSerial();
//   sim800l.write(26);
// }

void onBeatDetected() {
  Serial.println("Beat!");

  //Sendmsg();
}

void setup() {
  Serial.begin(115200);
  mySerial.begin(115200);
  
  
  // setup module Sim
  sim800l.begin(115200);
  delay(1000);

  

  sim800l.println("AT+CMGF=1");  // Configuring TEXT mode
  delay(1000);
  
  sim800l.println("AT+CMGS=\"+84363350371\"");  
  delay(1000);
  sim800l.print("The user is preparing for a health check");  //text content
  delay(1000);
  sim800l.write(26);

  // Setup buzzer
  pinMode(BUZZERPIN, OUTPUT);  // Thiết lập pin của buzzer là OUTPUT
  
  // Init
  Serial.print("Initializing pulse oximeter..");
  lcd.init();
  lcd.backlight();
  lcd.print("Initializing...");
  delay(3000);
  lcd.clear();

  // Initialize the PulseOximeter instance
  // Failures are generally due to an improper wiring, missing power supply
  if (!pox.begin()) {
    Serial.println("FAILED");
    for (;;);
  } else {
    Serial.println("SUCCESS");
  }


  pox.setIRLedCurrent(MAX30100_LED_CURR_7_6MA);

  // Register a callback for the beat detection
  pox.setOnBeatDetectedCallback(onBeatDetected);
}

void loop() {
  // Make sure to call update as fast as possible
  pox.update();
  if (millis() - tsLastReport > REPORTING_PERIOD_MS) {

    float heartbeat = pox.getHeartRate();
    float concentration = pox.getSpO2();

 

    // Tạo chuỗi chứa các giá trị đọc được
    String dataString = String(heartbeat) + "," + String(concentration);

    // Gửi chuỗi qua giao thức UART đến ESP8266
    mySerial.println(dataString);

    // In chuỗi ra Serial Monitor để kiểm tra
    //Serial.println(dataString);


    lcd.clear();
    lcd.setCursor(0, 0);
    lcd.print("Heart : ");
    lcd.print(heartbeat);

  
    lcd.setCursor(0, 1);
    lcd.print("SpO2: ");
    lcd.print(concentration);
    lcd.print("%");
    if (heartbeat > 60) {
      // digitalWrite(BUZZERPIN, HIGH);
      Serial.print("Warning");
      Serial.println(heartbeat);
        sim800l.println("AT+CMGF=1");  // Configuring TEXT mode
  delay(25);
  
  sim800l.println("AT+CMGS=\"+84363350371\"");  
  delay(25);

  sim800l.print("Nhip tim qua cao:");
  sim800l.print(heartbeat);  //text content
  delay(25);
  //updateSerial();
  sim800l.write(26);
    }
    // else{
    //   digitalWrite(BUZZERPIN, LOW);

    // }


    tsLastReport = millis();
  }
}

