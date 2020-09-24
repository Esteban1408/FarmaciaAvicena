public class TiposVariables
{
	public static void main(String []args)
	{
		System.out.println("hola que tal");
		byte a=127;
		short s=32767;
		int entera=2147483647;
		long larga=12345665432L;
		float real= 567.54f;
		double dd=4566.8846f;
		char c='A';
		boolean boleano=true;
		
		System.out.println("a="+a);
		System.out.println("s="+s);
		System.out.println("entera="+entera);
		System.out.println("larga="+larga);
		System.out.println("flotante="+real);
		System.out.println("doble="+dd);
		System.out.println("char="+c+"  "+(int)c);//valor numerico de un caracater, por decir de la A es 65
		System.out.println("boolean="+boleano);
	}
}