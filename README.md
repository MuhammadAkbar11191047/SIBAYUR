# SIBAYUR
Tugas Mata Kuliah pengembangan aplikasi berbasis web
# Modul
1. produk
2. kategori
3. transaksi
4. pembayaran
5. pengiriman


# Menambah product
Request:
  - Method : POST
  - Endpoint : /api/produk
  - Header :
  
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {
          "nama" : "string",
          "harga" : "long",
          "stok" : "integer",
          "gambar" : "string",
          
        }
        
   - Response:
   
         {
              code : "number"
              status : "string"
              data : {
                      "nama" : "string",
                      "harga" : "long",
                      "stok" : "integer",
                      "gambar" : "string",
                      "created_at" : "timestamp",
                      "updated_at" : "timestamp",
                    }
          }
          
 # Mengubah daftar product
Request:
  - Method : PUT
  - Endpoint : /api/ubah-portofolio/{id}
  - Header :
    
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {
            "jenis" : "string",
            "judul" : "string",
            "problem" : "string",
            "solusi" : "string",
            "fitur" : "text",
            "metode" : "string",
            "tahun" : "string",
            "foto" : "string",
            "created_at" : "timestamp",
            "updated_at" : "timestamp",
            "slug"  : "string"
        }
        
   - Response:
   
          {
              code : "number"
              status : "string"
              data : {
                      "id" : "bigint, primary, auto-increment",
                      "jenis" : "string",
                      "judul" : "string",
                      "problem" : "string",
                      "solusi" : "string",
                      "fitur" : "text",
                      "metode" : "string",
                      "tahun" : "string",
                      "foto" : "string",
                      "created_at" : "timestamp",
                      "updated_at" : "timestamp",
                      "slug"  : "string"
                    }
          }

