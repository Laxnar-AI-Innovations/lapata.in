Run a MySQL → Supabase Postgres migration using pgloader:

1) Install pgloader locally.
2) Copy `db/pgloader.load` and replace placeholders:
   - {MYSQL_USER}, {MYSQL_PASS}, {MYSQL_HOST}, {MYSQL_PORT}, {MYSQL_DB}
   - {PG_USER}, {PG_PASS}, {PG_HOST}, {PG_PORT}, {PG_DB}
   - Use your Supabase connection settings; keep `sslmode=require`.
3) Execute: `pgloader db/pgloader.load`

After migration, verify sequences and constraints, and test the app.

