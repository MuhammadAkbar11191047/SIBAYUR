# SIBAYUR
Tugas Mata Kuliah pengembangan aplikasi berbasis web
# Modul
1. produk
2. kategori
3. transaksi
4. pembayaran
5. pengiriman

#produk 
Request :
  - Method : POST
  - Endpoint : /api/product
  - Header : 
      - Content-Type: application/json
      - Accept: application/json



# Menambah data Portofolio
Request:
  - Method : POST
  - Endpoint : /api/tambah-portofolio
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
        
   - Respone:
   
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
          
 # Mengubah data Portofolio
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
        
   - Respone:
   
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

