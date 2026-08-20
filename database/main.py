import sqlite3
import random

# 1. Setup sample database
conn = sqlite3.connect('database.sqlite')
cursor = conn.cursor()

# 2. Array of random strings to populate
random_names = ['Firefox', 'Chrome']

# 3. Fetch IDs where name is NULL
cursor.execute('SELECT id FROM login_history WHERE browser IS NULL')
rows = cursor.fetchall()

# 4. Update each NULL field
for row in rows:
    new_value = random.choice(random_names)
    cursor.execute('UPDATE login_history SET browser = ? WHERE id = ?',(new_value, row[0]))

conn.commit()

# Verify
print(cursor.execute('SELECT * FROM login_history').fetchall())
conn.close()
