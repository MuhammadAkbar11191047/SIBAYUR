# SIBAYUR
Tugas Mata Kuliah pengembangan aplikasi berbasis web
# Modul
1. produk
2. user
3. transaksi
4. pembayaran
5. pengiriman


# Menambah produk
Request:
  - Method : POST
  - Endpoint : /api/produk
  - Header :
  
          Content-Type: application/json
          Authorization: JWT
          
  - Body :
  
        {
          "nama" : "varchar",
          "harga" : "varchar",
          "jumlah" : "bigint",
          "gambar" : "varchar",
          
        }
        
   - Response:
   
         {
              code : "number"
              status : "string"
              data : {
                      "id"  : "bigint",
                      "nama" : "varchar ",
                      "harga" : "varchar",
                      "jumlah" : "bigint",
                      "gambar" : "varchar",
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
          Authorization: JWT
          
  - Body :
  
        {
             
          "nama" : "varchar",
          "harga" : "varchar",
          "stok" : "bigint",
          "gambar" : "varchar",
          
        }
        
        
   - Response:
   
          {
              code : "number"
              status : "string"
              data : {
                      "id"  : "bigint"
                      "nama" : "varchar",
                      "harga" : "varchar",
                      "jumlah" : "bigint",
                      "gambar" : "varchar",
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
          Authorization: JWT
   - Respone:
   
    {
        code : "number",
        status : "string",
        pesan : "string"
    }
    

# Menambah user
Request:
  - Method : POST
  - Endpoint : /api/user
  - Header :
  
          Content-Type: application/json
          Authorization: JWT
          
  - Body :
  
        {
          "name" : "varchar",
          "email" : "varchar",
          "password" : "varchar ",
          
        }
        
   - Response:
   
         {
              code : "number"
              status : "string"
              data : {
                      "id"  : "bigint",
                      "name" : "varchar ",
                      "email" : "varchar",
                      "password" : "varchar",
                      "created_at" : "timestamp",
                      "updated_at" : "timestamp",
                    }
          }
          
 # Mengubah daftar user
Request:
  - Method : PUT
  - Endpoint : /api/ubah-user/{id}
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
          
  - Body :
  
        {
             
         "name" : "varchar",
          "email" : "varchar",
          "password" : "varchar ",
          
        }
        
        
   - Response:
   
          {
              code : "number"
              status : "string"
              data : {
                     "id"  : "bigint",
                      "name" : "varchar ",
                      "email" : "varchar",
                      "password" : "varchar",
                      "created_at" : "timestamp",
                      "updated_at" : "timestamp",
                    }
          }
          
# Menghapus data user
Request:
  - Method : DELETE
  - Endpoint : /api/hapus-user/{id}
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
   - Respone:
   
    {
        code : "number",
        status : "string",
        pesan : "string"
    }



