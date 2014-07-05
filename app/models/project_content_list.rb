class ProjectContentList < ActiveRecord::Base
  belongs_to :project
  has_many :project_content_list_elements
end
