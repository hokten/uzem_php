public class Oyuncu {
	int sayi = 0;
	public void tahminEt() {
		sayi =(int) (Math.random() * 10);
		System.out.println(sayi + "sayisini tahmin ettim");
	}
}

