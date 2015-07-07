create database `SUKASUQA`;

create table data(
	id int(2) not null unique,
	pertanyaan text not null,
	ifyes int(1) not null,
	ifno int(1) not null
);

	insert into `data` values(
		'1',
		'Apakah Anda sudah melakukan test uji kehamilan dengan menggunakan test pack?',
		'3',
		'2'
	);

	insert into `data` values(
		'2',
		'Sebaiknya anda melakukan test terlebih dulu!\nTerima kasih telah menggunakan SUKASUQA',
		'0',
		'0'
	);

	insert into `data` values(
		'3',
		'Apakah hasilnya positif?',
		'5',
		'4'
	);

	insert into `data` values(
		'4',
		'Anda tidak hamil.\nTerima kasih telah menggunakan SUKASUQA',
		'0',
		'0'
	);

	insert into `data` values(
		'5',
		'Apakah Anda mengalami terlambat datang bulan dalam 3 minggu terakhir?',
		'7',
		'6'
	);

	insert into `data` values(
		'6',
		'Kemungkinan Anda tidak hamil.\nTerima kasih telah menggunakan SUKASUQA',
		'0',
		'0'
	);

	insert into `data` values(
		'7',
		'Apakah Anda sering mual dan muntah (khususnya pada pagi hari) selama 3 minggu ini, dan mengiginkan sesuatu yang di luar kebiasaan anda (ngidam)?',
		'9',
		'8'
	);

	insert into `data` values(
		'8',
		'Kemungkinan Anda tidak hamil.\nTerima kasih telah menggunakan SUKASUQA',
		'0',
		'0'
	);

	insert into `data` values(
		'9',
		'Apakah anda merasa mengalami perubahan berat badan dan tidak Nafsu makan, serta mengalami susah Buang Air Besar dan Sering buang air kecil?',
		'11',
		'10'
	);

	insert into `data` values(
		'10',
		'Kemungkinan Anda tidak hamil.\nTerima kasih telah menggunakan SUKASUQA',
		'0',
		'0'
	);

	insert into `data` values(
		'11',
		'Apakah anda merasakan gerakan-gerakan kecil pada rahim anda?',
		'13',
		'12'
	);

	insert into `data` values(
		'12',
		'Kemungkinan Anda tidak hamil.\nTerima kasih telah menggunakan SUKASUQA',
		'0',
		'0'
	);

	insert into `data` values(
		'13',
		'Selamat Anda akan menjadi seorang Ibu\n(namun untuk lebih pasti silakan Anda berkonsultasi pada Dokter kandungan anda!)',
		'0',
		'0'
	);

create table `admin`(
	id int(2) unsigned not null auto_increment primary key,
	username varchar(30) not null,
	password varchar(100) not null
);

	insert into `admin` values(
		'',
		'administrator',
		md5('abcd')
	);