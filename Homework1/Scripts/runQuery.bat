sqlcmd -S .\TEST_INSTANCE -v FullScriptDir="%CD%\..\DataFiles" -i create_database_and_tables_and_populate.sql -b

