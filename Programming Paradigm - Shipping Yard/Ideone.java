/* package whatever; // don't place package name! */
 
import java.util.*;
import java.lang.*;
import java.io.*;
 
/* Name of the class has to be "Main" only if the class is public. */
class Ideone
{
	public static void main (String[] args) throws java.lang.Exception
	{
		// your code goes here
		SailingShip sailingShip = new SailingShip();
		sailingShip.setAnchor("This is anchor");
		System.out.println(sailingShip.getAnchor());
 
		MotorShip motorShip = new MotorShip();
		motorShip.setDeck("This is deck");
		System.out.println(motorShip.getDeck());
 
		// test polymorphism
		CruiseShip cruiseShip = new CruiseShip();
		System.out.println(cruiseShip.getName());
		cruiseShip.setFunnel("this is a funnel");
		System.out.println(cruiseShip.getFunnel());	
}
 
 
	static abstract class Ship {
		// not too affect to subclass
		private String type;
		private String name;
 
		// actions (what must has)
		abstract String getType();
		abstract String getName();
		abstract void setType(String type);
		abstract void setName(String name);
	}
 
	static class SailingShip extends Ship {
		private String type = "SAILING";
		private String name = "Sailing Ship";
 
		// ship parts
		private String anchor;
		private String bow;
		private String deck;
		private String propeller;
		private String keel;
		private String funnel;
 
		String getType() {
			return this.type;
		}
 
		String getName() {
			return this.name;
		}
 
		String getAnchor() {
			return anchor;
		}
 
		String getBow() {
			return bow;
		}
 
		String getDeck() {
			return deck;
		}
 
		String getPropeller() {
			return propeller;
		}
 
 
		String getKeel() {
			return keel;
		}
 
		String getFunnel() {
			return funnel;
		}		
 
		void setType(String type) {
			this.type = type;
		}
 
		void setName(String name) {
			this.name = name;
		}
 
 		void setAnchor(String anchor) {
			this.anchor = anchor;
		}
 
		void setBow(String bow) {
			this.bow = bow;
		}
 
		void setDeck(String deck) {
			this.deck = deck;
		}
 
		void  setPropeller(String propeller) {
			this.propeller = propeller;
		}
 
 
		void setKeel(String keel) {
			this.keel = keel;
		}
 
		void setFunnel(String funnel) {
			this.funnel = funnel;
		}		
	}
 
static class MotorShip extends Ship {
		private String type = "MOTOR";
		private String name = "Motor Ship";
 
		// ship parts
		private String anchor;
		private String bow;
		private String deck;
		private String propeller;
		private String keel;
		private String funnel;
 
		String getType() {
			return this.type;
		}
 
		String getName() {
			return this.name;
		}
 
		String getAnchor() {
			return anchor;
		}
 
		String getBow() {
			return bow;
		}
 
		String getDeck() {
			return deck;
		}
 
		String getPropeller() {
			return propeller;
		}
 
 
		String getKeel() {
			return keel;
		}
 
		String getFunnel() {
			return funnel;
		}		
 
		void setType(String type) {
			this.type = type;
		}
 
		void setName(String name) {
			this.name = name;
		}
 
 		void setAnchor(String anchor) {
			this.anchor = anchor;
		}
 
		void setBow(String bow) {
			this.bow = bow;
		}
 
		void setDeck(String deck) {
			this.deck = deck;
		}
 
		void  setPropeller(String propeller) {
			this.propeller = propeller;
		}
 
 
		void setKeel(String keel) {
			this.keel = keel;
		}
 
		void setFunnel(String funnel) {
			this.funnel = funnel;
		}		
	}
 
	static class PassangerShip extends Ship {
		private String type = "PASSENGER";
		private String name = "Passenger Ship";
 
		// ship parts
		private String anchor;
		private String bow;
		private String deck;
		private String propeller;
		private String keel;
		private String funnel;
 
		String getType() {
			return this.type;
		}
 
		String getName() {
			return this.name;
		}
 
		String getAnchor() {
			return anchor;
		}
 
		String getBow() {
			return bow;
		}
 
		String getDeck() {
			return deck;
		}
 
		String getPropeller() {
			return propeller;
		}
 
 
		String getKeel() {
			return keel;
		}
 
		String getFunnel() {
			return funnel;
		}		
 
		void setType(String type) {
			this.type = type;
		}
 
		void setName(String name) {
			this.name = name;
		}
 
 		void setAnchor(String anchor) {
			this.anchor = anchor;
		}
 
		void setBow(String bow) {
			this.bow = bow;
		}
 
		void setDeck(String deck) {
			this.deck = deck;
		}
 
		void  setPropeller(String propeller) {
			this.propeller = propeller;
		}
 
 
		void setKeel(String keel) {
			this.keel = keel;
		}
 
		void setFunnel(String funnel) {
			this.funnel = funnel;
		}		
	}
 
	static class CruiseShip extends PassangerShip{
		private String name = "Cruise Ship";
 
		// overriding (polymorphism)
		String getName() {
			return super.name + " - " + this.name; 
		}
	}
 
 
}