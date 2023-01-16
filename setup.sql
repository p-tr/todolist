PRAGMA foreign_keys = ON;

CREATE TABLE IF NOT EXISTS Status (
    id INTEGER PRIMARY KEY,
    value TEXT NOT NULL,
    UNIQUE(id, value)
);

INSERT OR REPLACE INTO Status(id, value) VALUES
    (1, 'available'), (2, 'progress'), (3, 'done')
;

CREATE TABLE IF NOT EXISTS Task (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    description TEXT NOT NULL,
    status INTEGER NOT NULL,
    deadline INTEGER NOT NULL,
    FOREIGN KEY (status) REFERENCES Status(id)
);

CREATE INDEX IF NOT EXISTS IDX_FK_Task_Status ON Task(status);
