package selProject;

import org.openqa.selenium.By;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.chrome.ChromeOptions;
import org.openqa.selenium.support.ui.Select;

public class  VerifyTitle{

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		ChromeOptions options = new ChromeOptions(); 
		//options.addArguments("disable-infobars"); 
	System.setProperty("webdriver.chrome.driver", "chromedriver.exe");
	System.setProperty("webdriver.chrome.driver", "chromedriver.exe");
	ChromeDriver driver=new ChromeDriver();
	driver.get("http://localhost:8080/facebook/facebook_login.php");
	driver.findElement(By.xpath("//*[@id=\"firstname\"]")).sendKeys("nandini");
	driver.findElement(By.xpath("//*[@id=\"lastname\"]")).sendKeys("agarwal");
	driver.findElement(By.xpath("//*[@id=\"email\"]")).sendKeys("nandiniagarwal9634@mail.com"); 
	driver.findElement(By.xpath("//*[@id=\"remail\"]")).sendKeys("nandiniagarwal9634@mail.com");
	driver.findElement(By.xpath("//*[@id=\"password\"]")).sendKeys("premprakash");
	driver.findElement(By.xpath("//*[@id=\"registerbutton\"]")).click();

		}
    }
