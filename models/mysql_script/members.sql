SELECT m.member_id, a.account_type, m.group_name, m.fname, m.lname, m.email
FROM (members m INNER JOIN account_type a ON a.account_type_id=m.account_type_id);
SELECT m.group_name, p.phone FROM (members m INNER JOIN phone p ON p.member_id=m.member_id);
SELECT m.group_name, i.instagram_name, i.url FROM (members m INNER JOIN instagram i ON i.member_id=m.member_id);
SELECT m.email, l.iv, l.hmac, l.hash_password FROM (members m INNER JOIN login l ON l.member_id=m.member_id);