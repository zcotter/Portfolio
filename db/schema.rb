# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 20141025174644) do

  # These are extensions that must be enabled in order to support this database
  enable_extension "plpgsql"

  create_table "bananagrams_games", force: true do |t|
    t.integer  "first_player_id"
    t.integer  "second_player_id"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.boolean  "poc"
  end

  create_table "bananagrams_moves", force: true do |t|
    t.integer  "bananagrams_game_id"
    t.string   "x0"
    t.string   "y0"
    t.string   "x1"
    t.string   "y1"
    t.string   "letter"
    t.integer  "bananagrams_player_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "bananagrams_moves", ["bananagrams_game_id"], name: "index_bananagrams_moves_on_bananagrams_game_id", using: :btree
  add_index "bananagrams_moves", ["bananagrams_player_id"], name: "index_bananagrams_moves_on_bananagrams_player_id", using: :btree

  create_table "bananagrams_player", force: true do |t|
    t.string   "name"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "bananagrams_players", force: true do |t|
    t.string   "name"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.string   "registration_id"
  end

  create_table "bananagrams_score", force: true do |t|
    t.integer "score"
    t.integer "bananagrams_player_id"
  end

  create_table "bananagrams_scores", force: true do |t|
    t.integer  "score"
    t.integer  "bananagrams_player_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "bananagrams_scores", ["bananagrams_player_id"], name: "index_bananagrams_scores_on_bananagrams_player_id", using: :btree
  add_index "bananagrams_scores", ["score"], name: "index_bananagrams_scores_on_score", using: :btree

  create_table "delayed_jobs", force: true do |t|
    t.integer  "priority",   default: 0, null: false
    t.integer  "attempts",   default: 0, null: false
    t.text     "handler",                null: false
    t.text     "last_error"
    t.datetime "run_at"
    t.datetime "locked_at"
    t.datetime "failed_at"
    t.string   "locked_by"
    t.string   "queue"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "delayed_jobs", ["priority", "run_at"], name: "delayed_jobs_priority", using: :btree

  create_table "post_photos", force: true do |t|
    t.integer  "post_id"
    t.string   "image_file_name"
    t.string   "image_content_type"
    t.integer  "image_file_size"
    t.datetime "image_updated_at"
    t.text     "caption"
  end

  create_table "posts", force: true do |t|
    t.string   "title"
    t.text     "content"
    t.string   "tag"
    t.datetime "published_on"
  end

  create_table "project_content_list_elements", force: true do |t|
    t.string   "content"
    t.integer  "project_content_list_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "project_content_lists", force: true do |t|
    t.string   "title"
    t.integer  "project_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "project_link_buttons", force: true do |t|
    t.string   "name"
    t.string   "link"
    t.integer  "project_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "projects", force: true do |t|
    t.string   "name"
    t.string   "lead"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.string   "language"
  end

  create_table "users", force: true do |t|
    t.string   "email",                  default: "", null: false
    t.string   "encrypted_password",     default: "", null: false
    t.string   "reset_password_token"
    t.datetime "reset_password_sent_at"
    t.datetime "remember_created_at"
    t.integer  "sign_in_count",          default: 0
    t.datetime "current_sign_in_at"
    t.datetime "last_sign_in_at"
    t.string   "current_sign_in_ip"
    t.string   "last_sign_in_ip"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "users", ["email"], name: "index_users_on_email", unique: true, using: :btree
  add_index "users", ["reset_password_token"], name: "index_users_on_reset_password_token", unique: true, using: :btree

  create_table "viewers", force: true do |t|
    t.string "ip"
  end

  create_table "views", force: true do |t|
    t.integer  "viewer_id"
    t.string   "path"
    t.datetime "at"
    t.string   "user_agent"
  end

  add_index "views", ["viewer_id"], name: "index_views_on_viewer_id", using: :btree

end
