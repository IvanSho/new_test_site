SELECT * FROM face;
INSERT INTO army (email, password) VALUES ('$email', '$password');
SELECT face.name as name_face, song.name as name_song FROM face LEFT JOIN face_song ON face.id = face_song.face_id LEFT JOIN song ON face_song.song_id = song.id;
SELECT army.email, band.name FROM army RIGHT JOIN band_army ON army.id = band_army.army_id RIGHT JOIN band ON band.id = band_army.band_id;
