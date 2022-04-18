# SIBAYUR
Tugas Mata Kuliah pengembangan aplikasi berbasis web
# Modul
1. produk
2. kategori
3. transaksi
4. pembayaran
5. pengiriman


# Menambah produk
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
          
 # Mengubah daftar produk
Request:
  - Method : PUT
  - Endpoint : /api/ubah-produk/{id}
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
          
# Menghapus data produk
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-produk/{id}
  - Header :
    
          Content-Type: application/json
          
   - Respone:
   
    {
        code : "number",
        status : "string",
        pesan : "string"
    }
