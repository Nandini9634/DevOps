package selProject;

import org.openqa.selenium.By;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.chrome.ChromeOptions;

public class Login {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		ChromeOptions options = new ChromeOptions(); 
		//options.addArguments("disable-infobars"); 
	System.setProperty("webdriver.chrome.driver", "chromedriver.exe");
	System.setProperty("webdriver.chrome.driver", "chromedriver.exe");
	ChromeDriver driver=new ChromeDriver();
	driver.get("http://localhost:8080/facebook/facebook_login.php");
	driver.findElement(By.id("email")).sendKeys("nandiniagarwal9634@gmail.com");
	driver.findElement(By.id("pass")).sendKeys("premprakash");
	driver.findElement(By.name("login")).click();
		}
    }
