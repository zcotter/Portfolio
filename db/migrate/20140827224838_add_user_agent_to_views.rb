class AddUserAgentToViews < ActiveRecord::Migration
  def change
    add_column :views, :user_agent, :string
  end
end
