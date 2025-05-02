using System;

namespace LatihanclassDanObject
{
    public class Mahasiswa
    {
        public string NIM { get; set; }
        public string Nama { get; set; }
        public double Ipk { get; set; }

        public void Registrasi()
        {
            Console.WriteLine("Nama : {0}", Nama);
            Console.WriteLine("NIM : {0}", NIM);
            Console.WriteLine("IPK : {0}", Ipk);
        }

        public void IsiKrs()
        {
            Console.WriteLine("{0} sedang mengisi KRS\n", Nama);
        }
    }

    // Ini class yang penting: tempat method Main berada!
    public class Program
    {
        public static void Main(string[] args)
        {
            Mahasiswa mhs = new Mahasiswa();
            mhs.NIM = "123456";
            mhs.Nama = "Budi";
            mhs.Ipk = 3.75;

            mhs.Registrasi();
            mhs.IsiKrs();

            Console.ReadLine(); // Supaya konsol tetap terbuka
        }
    }
}
