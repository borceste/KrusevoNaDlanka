CREATE DATABASE dbKrushevoNaDlanka;
go
use dbKrushevoNaDlanka;
GO

/*Creating the tables*/
CREATE TABLE restaurants( 
id varchar(200) not null,
name varchar(20) not null, 
latitude float not null,
longitude float not null,
constraint PK_restaurants primary key (id));

Go

CREATE TABLE cafes( 
id varchar(200) not null,
name varchar(20) not null, 
latitude float not null,
longitude float not null,
constraint PK_cafes primary key (id));

go

CREATE TABLE apartments( 
id varchar(200) not null,
name varchar(20) not null, 
latitude float not null,
longitude float not null,
constraint PK_apartments primary key (id));

go

CREATE TABLE hotels( 
id varchar(200) not null,
name varchar(20) not null, 
latitude float not null,
longitude float not null,
constraint PK_hotels primary key (id));

GO


/*Populating the tables*/

BULK INSERT [dbo].[restaurants]
FROM '$(FullScriptDir)\restaurants.csv'
   WITH (
	  FIRSTROW = 2,
      FIELDTERMINATOR = ',',
      ROWTERMINATOR = '\n'
);


BULK INSERT [dbo].[cafes] 
FROM '$(FullScriptDir)\cafes.csv'
   WITH (
	  FIRSTROW = 2,
      FIELDTERMINATOR = ',',
      ROWTERMINATOR = '\n'
);


BULK INSERT [dbo].[apartments] 
FROM '$(FullScriptDir)\apartments.csv'
   WITH (
	  FIRSTROW = 2,
      FIELDTERMINATOR = ',',
      ROWTERMINATOR = '\n'
);


BULK INSERT [dbo].[hotels] 
FROM '$(FullScriptDir)\hotels.csv'
   WITH (
	  FIRSTROW = 2,
      FIELDTERMINATOR = ',',
      ROWTERMINATOR = '\n'
);

GO

/* Deleting rows where the name is invalid */

DELETE FROM apartments WHERE LEN(name)=0
DELETE FROM hotels WHERE LEN(name)=0
DELETE FROM cafes WHERE LEN(name)=0
DELETE FROM restaurants WHERE LEN(name)=0
GO