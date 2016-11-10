public class TahminOyunu {
	Oyuncu o1;
	Oyuncu o2;
	Oyuncu o3;
	public void oyunuBaslat() {
		o1 = new Oyuncu();
		o2 = new Oyuncu();
		o3 = new Oyuncu();

		int o1tahmin=0;
		int o2tahmin=0;
		int o3tahmin=0;

		boolean o1sonuc = false;
		boolean o2sonuc = false;
		boolean o3sonuc = false;

		System.out.println("O ile 9 arasinda bir sayi tutuyorum...");
		int tahmin_edilecek_sayi = (int) (Math.random() * 10);


		while(true) {
			System.out.println("Tuttugum sayi : " + tahmin_edilecek_sayi);
			o1.tahminEt();
			o2.tahminEt();
			o3.tahminEt();

			o1tahmin = o1.sayi;
			System.out.println("Birinci oyuncunun tahmini "+ o1tahmin);
			o2tahmin = o2.sayi;
			System.out.println("Birinci oyuncunun tahmini "+ o2tahmin);
			o3tahmin = o3.sayi;
			System.out.println("Birinci oyuncunun tahmini "+ o3tahmin);

			if(o1tahmin == tahmin_edilecek_sayi) {
				o1sonuc = true;
			}
			if(o2tahmin == tahmin_edilecek_sayi) {
				o2sonuc = true;
			}
			if(o3tahmin == tahmin_edilecek_sayi) {
				o3sonuc = true;
			}
			if(o1sonuc | o2sonuc | o3sonuc) {
				System.out.println("Kazanan var");
				System.out.println("Birinci oyuncu "+ o1tahmin + " dedi dogrumu?");
				System.out.println("Ikinci oyuncu "+ o2tahmin + " dedi dogrumu?");
				System.out.println("Ucuncu oyuncu "+ o3tahmin + " dedi dogrumu?");
				System.out.println("Oyun bitti");
				break;
			}
			else {
				System.out.println("Dogru tahmin yok, tekrar deneyecekler");
			}
		}
	}
}

