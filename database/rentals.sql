SQLite format 3   @     	   
                                                            	 -�
   �    
��  }     � C+�indexpassword_resets_email_indexpassword_resetsCREATE INDEX "password_resets_email_index" on "password_resets" ("email")�++�ktablepassword_resetspassword_resetsCREATE TABLE "password_resets" ("email" varchar not null, "token" varchar not null, "created_at" datetime null)a1�indexusers_email_uniqueusersCREATE UNIQUE INDEX "users_email_unique" on "users" ("email")��gtableusersusersCREATE TABLE "users" ("id" integer not null primary key autoincrement, "name" varchar not null, "email" varchar not null, "password" varchar not null, "remember_token" varchar null, "created_at" datetime null, "updated_at" datetime null)P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)�$!!�tablemigrationsmigrationsCREATE TABLE "migrations" ("id" integer not null primary key autoincrement, "migration" varchar not null, "batch" integer not    	   v ��v                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        * Y	2017_05_24_063634_create_suburbs_table2 i	2014_10_12_100000_create_password_resets_table( U	2014_10_12_000000_create_users_table   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      !migrations                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               � Y �  } y   � C+�indexpassword_resets_email_indexpassword_resetsCREATE INDEX "password_resets_email_i  !� C+�indexpassword_resets_email_indexpassword_resetsCREATE INDEX "password_resets_email_index" on "password_resets" ("email")�++�ktablepassword_resetspassword_resetsCREATE TABLE "password_resets" ("email" varchar not null, "token" varchar not null, "created_at" datetime null)a1�indexusers_email_uniqueusersCREATE UNIQUE INDEX "users_email_unique" on "users" ("email")��gtableusersusersCREATE TABLE "users" ("id" integer not null primary key autoincrement, "name" varchar not null, "email" varchar not null, "password" varchar not null, "remember_token" varchar null, "created_at" datetime null, "updated_at" datetime null)P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)�$!!�tablemigrationsmigrationsCREATE TABLE "migrations" ("id" integer not null primary key autoincrement, "migration" varchar not null, "batch" integer not null)   � c��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    �{�MtablesuburbssuburbsCREATE TABLE "suburbs" ("id" integer not null primary key autoincrement, "suburb" varchar null, "postcode" varchar null, "score" float null, "created_at" datetime null, "updated_at" datetime null, "deleted_at" datetime null)� C+�indexpassword_resets_email_indexpassword_resetsCREATE INDEX "password_resets_email_index" on "password_resets" ("email")�++�ktablepassword_resetspassword_resetsCREATE TABLE "password_resets" ("email" varchar not null, "token" varchar not null, "created_at" datetime null)