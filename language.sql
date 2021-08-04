create a database with name language and table name = page
then in page table create 3 columns 
# name               type              collation            null   default    extra 
1.id                 int(11)                                 no     none      auto increment
2.page_content      varchar(255)        utf8mb4_general_ci	 no     none        
3.language_type     varchar(5)          utf8mb4_general_ci   no     none


ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

Note: Remember put Auto increment on id and make it primary key.