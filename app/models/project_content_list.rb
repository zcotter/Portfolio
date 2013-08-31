class ProjectContentList < ActiveRecord::Base
  attr_accessible :title
  belongs_to :project
end
