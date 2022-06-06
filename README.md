# SIBAYUR
Tugas Mata Kuliah pengembangan aplikasi berbasis web
# Modul
1. produk
2. user
3. pembayaran
4. pengiriman


# Menambah produk
Request:
  - Method : POST
  - Endpoint : /api/produk
  - Header :
  
          Content-Type: application/json
          Authorization: JWT
          Accept: application/json
          
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
          Accept: application/json
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
          Accept: application/json
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
          Accept: application/json
          
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
          Accept: application/json
          
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
          Accept: application/json
   - Respone:
   
    {
        code : "number",
        status : "string",
        pesan : "string"
    }


# Melalukan Login
Request:
  - Method : POST
  - Endpoint : /api/login
  - Header :
    
          Content-Type: application/json
          Accept: application/json
          
  - Body :
  
        {
          "email" : "string",
          "password" : "string"
        }
        
   - Respone:
   
    {
        status : "string"
        user : {
                "id" : "bigint, primary, auto-increment",
                "name" : "string",
                "email" : "string",
                "email_verified_at" : "timestamp",
                "password" : "string",
                "remember_token" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp
              }
         authorisation : {
                "token" : "string",
                "type" : "string
              }
    }

# Logout
Request:
  - Method : POST
  - Endpoint : /api/logout
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
          Accept: application/json
        
   - Respone:
   
    {
        status : "string",
        massage : "string"
       
    }
    
# Refresh jwt
Request:
  - Method : POST
  - Endpoint : /api/refresh
  - Header :
    
          Content-Type: application/json
          Authorization: JWT
          Accept: application/json
        
   - Respone:
   
    {
        status : "string"
        user : {
                "id" : "bigint, primary, auto-increment",
                "name" : "string",
                "email" : "string",
                "email_verified_at" : "timestamp",
                "password" : "string",
                "remember_token" : "string",
                "created_at" : "timestamp",
                "updated_at" : "timestamp
              }
         authorisation : {
                "token" : "string",
                "type" : "string
              }
       
    }

       
    

